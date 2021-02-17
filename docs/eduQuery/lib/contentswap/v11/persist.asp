<%@ Language = vbscript %>
<% option explicit%>

<%
'Session.Timeout=30

If IsEmpty(Request.QueryString("langpref")) Then
    Response.Write(Session("langpref"))
Else
	Session("langpref")=Request.QueryString("langpref")
	'JSON - Response.Write("{""langpref"" : """ & Request.QueryString("langpref") & """}")
	Response.Write("after set " & Session("langpref"))
End If

%>
