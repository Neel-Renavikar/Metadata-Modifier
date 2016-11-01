<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Home.aspx.cs" Inherits="Home" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Metadata Modifier</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        Welcome to Metadata Modifier!
    </div>
        
    <div>
          <asp:HyperLink ID="hyperlink1" NavigateUrl="~/PDFMetaMod.aspx" runat="server">PDF Files</asp:HyperLink>
    </div>
    </form>
</body>
</html>
