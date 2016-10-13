using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;
using iTextSharp.text.pdf;
using iTextSharp.text;
using System.Drawing;

public partial class _Default : System.Web.UI.Page
{
    String filepath, filename;
    PdfReader reader;
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        filename = FileUpload1.FileName;
        // create a reader (constructor overloaded for path to local file or URL)
        reader = new PdfReader(FileUpload1.FileContent);
        // total number of pages
        int n = reader.NumberOfPages;
        // size of the first page
        iTextSharp.text.Rectangle psize = reader.GetPageSize(1);
        float width = psize.Width;
        float height = psize.Height;
       // ("Size of page 1 of {0} => {1} × {2}", n, width, height);
        // file properties
        Dictionary<string, string> infodict = reader.Info;
        label1.Text = filename;
        label1.Visible = true;


        foreach (KeyValuePair<string, string> kvp in infodict)
        {
            Label l1 = new Label();
            TextBox l2 = new TextBox();
            l1.Text = kvp.Key;
            l2.Text = kvp.Value;
            TableCell t1 = new TableCell();
            TableCell t2 = new TableCell();
            t1.Controls.Add(l1);
            t2.Controls.Add(l2);
            TableRow tr1 = new TableRow();
            tr1.Cells.Add(t1);
            tr1.Cells.Add(t2);
            MetaTable.Rows.Add(tr1);
            MetaTable.Visible = true;
        }
            Upload();
           // Console.WriteLine(kvp.Key + " => " + kvp.Value);
    }

    protected void Upload()
    {
        String filename = Path.GetFileName(FileUpload1.PostedFile.FileName);
        FileUpload1.SaveAs(Server.MapPath("Files/" + filename));

        Response.Write("File uploaded sucessfully.");
    }

    protected void Button2_Click(object sender, EventArgs e)
    {
        filepath = Path.GetFullPath(label1.Text);    
    }
}