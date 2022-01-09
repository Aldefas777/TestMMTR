<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>WebTest</title>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
        <table>
            <tr>
                <td>
                    <label for="name">Your name:</label></td>
                <td>
                    <input type="text" id="name" /></td>
            </tr>
            <tr>
                <td>
                    <label for="color">Your favourite color:</label></td>
                <td>
                    <select id="color">
                        <option>Green</option>
                        <option>Red</option>
                        <option>Yellow</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="years">You are older than 18 years</label></td>
                <td>
                    <input type="checkbox" id="=years" /></td>
            </tr>
            <tr>
                <td>Your favourite time of day:</td>
                <td>
                    <input type="radio" id="radio-morning" name="daytime" />
                    <label for="radio-morning">Morning</label>
                    <br />
                    <input type="radio" id="radio-evening" name="daytime" />
                    <label for="radio-evening">Evening</label>
                    <br />
                    <input type="radio" id="radio-night" name="daytime" />
                    <label for="radio-night">Night</label>
                    <br />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                     <input type="button" id="btn" value="Отправить" />
                </td>
            </tr>
        </table>


    </form>

    <br>

    <div id="result_form"></div> 
</body>
</html>