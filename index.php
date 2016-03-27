<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Joe's Minerals - Homepage</title>
</head>
<body onload="loadPageAssets();">

    <center>
        <div id="mainCentreBox">
            <br />
            <a href=""><img id="logo" onmouseover="imageHover('logo');" onmouseout="imageUnHover('logo');" src="/img/logo.png" width="300" /><br /><br /></a>
            <hr />
            <a href=""><img src="/img/Homepage_Button.png" id="Homepage_Button" class="buttons" onmouseover="imageHover('Homepage_Button');" onmouseout="imageUnHover('Homepage_Button');" /></a>
            <a href="HowItWorks.php"><img src="/img/How_It_Works_Button.png" id="How_It_Works_Button" class="buttons" onmouseover="imageHover('How_It_Works_Button'); " onmouseout="imageUnHover('How_It_Works_Button');" /></a>

            <hr /><br />
            <font id="welcomeFont">Welcome to the homepage of Joe's Minerals. Here you can buy minerals for the SA:MP server Spring Vale RPG.</font>

            <form name="userInformationForm" method="post" action="submitForm.php">
                <table cellpadding="10">
                    <tr>
                        <td><strong>Spring Vale Name:  </strong></td>
                        <td><input type="text" value="Username" name="username" /><br /></td>
                    </tr>
                    
                    <tr>
                        <td><strong>Mineral:</strong></td>
                        <td>
                            <input type="radio" name="mineral" value="Lead" checked> Lead<br />
                            <input type="radio" name="mineral" value="Iron"> Iron<br />
                            <input type="radio" name="mineral" value="Zinc"> Zinc<br />
                            <input type="radio" name="mineral" value="Lithium"> Lithium<br />
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Quantity:</strong></td>
                        <td><input type="number" name="quantity" value="1" min="1" max="1000" /></td>
                    </tr>
                </table>
                <center><input type="submit" name="submitButton" value="Submit" /></center>
            </form>


                <br /><br />
                <font id="copyrightBox">Background texture from subtlepatterns.com</font><br /><br />
                <a href="http://www.zoneo.co.vu/"><img src="/img/zoneo_logo_orange.png" width="30" /></a>
                <br />
</div>
    </center>


    <link href="styles.css" rel="stylesheet" />
    <script src="scripts.js"></script>
</body>
</html>
