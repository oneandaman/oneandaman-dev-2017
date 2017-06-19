<?php
session_start();
session_destroy();
?>
<html>
    <head>

        <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="scripts/demos.js"></script>
        <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>


        <title>OneAndaman BackEnd</title>
    </head>
    <body>

        <div>
            <h3>OneAndaman BackEnd</h3>
        </div>
        <div >
            <form method="post" action="database/query.php?fc=login">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input style="width: 150px;" type="text" name="txtUsername" id="txtUsername"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input style="width: 150px;" type="password" name="txtPassword" id="txtPassword"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right" valign="bottom">
                            <input type="submit" id="login_submit" value="Login" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>




        <div>
            <?php
            if (isset($_SESSION['login_warning']))
            {
                echo "" . $_SESSION['login_warning'] . "";
            }
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $("#txtUsername").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#txtPassword").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#login_submit").jqxButton({width: 80, height: 30});
            });
        </script>
        <!-- </form> -->
    </body>
</html>