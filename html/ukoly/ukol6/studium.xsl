<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <body>
                <h1>TEST</h1>
                <xsl:for-each select="studium/rocnik/semestr/predmet">
                    <p>
                        <xsl:value-of select="nazev"/>
                    </p>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>