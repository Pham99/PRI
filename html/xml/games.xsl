<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <div class="container mt-5">
            <h2 class="mb-4">Game List</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Release Date</th>
                        <th>Genre</th>
                        <th>Developer</th>
                        <th>Publisher</th>
                        <th>Platforms</th>
                        <th>Description</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <xsl:for-each select="games/game">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="release_date"/></td>
                            <td><xsl:value-of select="genre"/></td>
                            <td><xsl:value-of select="developer"/></td>
                            <td><xsl:value-of select="publisher"/></td>
                            <td>
                                <xsl:for-each select="platforms/platform">
                                    <span><xsl:value-of select="."/></span><br/>
                                </xsl:for-each>
                            </td>
                            <td><xsl:value-of select="description"/></td>
                            <td><xsl:value-of select="rating"/></td>
                        </tr>
                    </xsl:for-each>
                </tbody>
            </table>
        </div>
    </xsl:template>
</xsl:stylesheet>
