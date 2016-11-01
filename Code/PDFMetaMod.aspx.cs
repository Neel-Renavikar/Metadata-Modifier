using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.IO;
using System.Web.UI;
using System.Web.UI.WebControls;
using iTextSharp.text.pdf;
using iTextSharp.text;
using System.Drawing;


public partial class PDFMetaMod : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        string filepath = FileUpload1.PostedFile.FileName;
        string fileName = FileUpload1.FileName;
        Upload();
        Stream FileContent = FileUpload1.FileContent;
        PdfReader reader = new PdfReader(FileContent);
        Dictionary<string, string> infodict = reader.Info;
        label1.Text = filepath;
        label1.Visible = true;

        Label[] Labelarr = { AuthorLabel, CreationDateLabel, CreatorLabel, KeywordsLabel, ModDateLabel, ProducerLabel, SubjectLabel, TitleLabel };
        TextBox[] TextArr = { AuthorTextBox, CreationDateTextBox, CreatorTextBox, KeywordsTextBox, ModDateTextBox, ProducerTextBox, SubjectTextBox, TitleText };
        foreach (KeyValuePair<string, string> kvp in infodict)
        {
            for (int i = 0; i < Labelarr.Length; i++)
            {
                if (Labelarr[i].Text == kvp.Key)
                {
                    TextArr[i].Text = kvp.Value;
                }
            }
        }
        MetaTable.Visible = true;
        reader.Close();
    }

    protected void Upload()
    {
        string filename = Path.GetFileName(FileUpload1.PostedFile.FileName);
        FileUpload1.SaveAs(Server.MapPath("Files/" + filename));

        Response.Write("File uploaded sucessfully.");
        //lblFilename.Text = "Files/" + fileUpload1.FileName;
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        Label[] Labelarr = { AuthorLabel, CreationDateLabel, CreatorLabel, KeywordsLabel, ModDateLabel, ProducerLabel, SubjectLabel, TitleLabel };
        TextBox[] TextArr = { AuthorTextBox, CreationDateTextBox, CreatorTextBox, KeywordsTextBox, ModDateTextBox, ProducerTextBox, SubjectTextBox, TitleText };

        String path = label1.Text;
        PdfReader reader = new PdfReader(System.IO.File.ReadAllBytes(path));
        PdfStamper stamper = new PdfStamper(reader , new FileStream(path,FileMode.OpenOrCreate));
        Dictionary<string, string> infodict = reader.Info;
        for(int i=0; i<Labelarr.Length;i++)
        {
            infodict.Add(Labelarr[i].Text, TextArr[i].Text);
        }
        stamper.MoreInfo = infodict;
        stamper.Close();
        reader.Close();
    }
}