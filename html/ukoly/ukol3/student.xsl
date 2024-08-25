<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <body>
                <h1> Studenti</h1>
                <table>
                    <tr>
                        <th>Jmeno</th>
                        <th>Email</th>
                    </tr>
                    <xsl:for-each select="studenty/student">
                        <tr>
                            <td>
                                <xsl:value-of select="jmeno"/> <xsl:value-of select="prijmeni"/>
                            </td>
                            <td>
                                <xsl:value-of select="email"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>