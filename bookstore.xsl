<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
<body>
<table border="1">
<tr>
<th>Title</th>
<th>Author</th>
<th>Year</th>
<th>Price</th>

</tr>
<xsl:for-each select="Bookstore/Book">
<tr>
<td><xsl:value-of select="Title"/></td>
<td><xsl:value-of select="author"/></td>
<td><xsl:value-of select="year"/></td>
<td><xsl:value-of select="price"/></td>

</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>