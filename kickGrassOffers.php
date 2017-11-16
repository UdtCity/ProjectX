<style type="text/css">
    <!-- .style3 {
        font-size: 18px;
        font-weight: bold;
    }
    
    -->

</style>

<body>
    <br><br><br>
    <center>
        <font color="#660066" size="+3">Add Item</font>
    </center>
    <br><br>
    <center>
        <fieldset style="width:50%">
            <form name="testform" method="post" enctype="multipart/form-data" action="model/kickGrassHotel/AdminOffer.php">
                <table align="center">
                    <tr>
                        <td><span class="style3">OfferID </span></td>
                        <td><label>
                                <input name="offerId" type="text" id="offerId">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="style3">OfferName </span></td>
                        <td><label>
                                <input name="offerName" type="text" id="offerName">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="style3">Description:</span></td>
                        <td><textarea name="offerDesc" cols="35" rows="6"></textarea></td>
                    </tr>
                    <tr>
                        <td><span class="style3">Price:</span></td>
                        <td><label>
                                <input name="offerPrice" type="text" id="offerPrice">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="style3">Class </span></td>
                        <td><label>
                                <input name="offerClass" type="text" id="offerClass">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="style3">Image:</span></td>
                        <td><input type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>