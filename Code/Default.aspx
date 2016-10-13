<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
    </div>
        <p>
            <asp:FileUpload ID="FileUpload1" runat="server" Height="24px" Width="319px" />
            <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="Get Data" Width="106px" />
            <asp:Button ID="Button2" runat="server" OnClick="Button2_Click" Text="Update" Width="109px" />
        </p>
        <p>
            <asp:Label ID="label1" runat="server" Visible="false"></asp:Label>
            <asp:Table ID="MetaTable" runat="server" BorderStyle="Solid" Visible="false">
                  <asp:TableHeaderRow ID="TableHeaderRow" runat="server">
                      <asp:TableHeaderCell ID="TableHeaderCell1" runat="server"> Attribute </asp:TableHeaderCell>
                      <asp:TableHeaderCell ID="TableHeaderCell2" runat="server"> Value </asp:TableHeaderCell>
                  </asp:TableHeaderRow>
                  <asp:TableRow ID ="TableRow1" runat="server">
                      <asp:TableCell ID="TableCell1" runat="server">
                          <asp:Label ID="TitleLabel" runat="server" Text="Title"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell16">
                          <asp:TextBox ID="TitleText" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow2" runat="server">
                      <asp:TableCell ID="TableCell2" runat="server">
                          <asp:Label ID="AuthorLabel" runat="server" Text="Author"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell15">
                          <asp:TextBox ID="AuthorTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow3" runat="server">
                      <asp:TableCell ID="TableCell3" runat="server">
                          <asp:Label ID="CreatorLabel" runat="server" Text="Creator"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell14">
                          <asp:TextBox ID="CreatorTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow4" runat="server">
                      <asp:TableCell ID="TableCell4" runat="server">
                          <asp:Label ID="ProducerLabel" runat="server" Text="Producer"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell13">
                              <asp:TextBox ID="ProducerTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow5" runat="server">
                      <asp:TableCell ID="TableCell5" runat="server">
                          <asp:Label ID="SubjectLabel" runat="server" Text="Subject"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell12">
                          <asp:TextBox ID="SubjectTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow6" runat="server">
                      <asp:TableCell ID="TableCell6" runat="server">
                          <asp:Label ID="KeywordsLabel" runat="server" Text="Keywords"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell11">
                          <asp:TextBox ID="KeywordsTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow7" runat="server">
                      <asp:TableCell ID="TableCell7" runat="server">
                          <asp:Label ID="ModDateLabel" runat="server" Text="ModDate"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell10">
                          <asp:TextBox ID="ModDateTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
                  <asp:TableRow ID ="TableRow8" runat="server">
                      <asp:TableCell ID="TableCell8" runat="server">
                          <asp:Label ID="CreationDateLabel" runat="server" Text="CreationDate"></asp:Label>
                          </asp:TableCell><asp:TableCell runat="server" ID="TableCell9">
                          <asp:TextBox ID="CreationDateTextBox" runat="server"></asp:TextBox>
                      </asp:TableCell>
                  </asp:TableRow>
             </asp:Table>
         </p>
    </form>
</body>
</html>
