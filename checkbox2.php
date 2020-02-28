<!DOCTYPE html>
<html>
    <head>
        <title>PHP: Get Values of Multiple Checked Checkboxes</title>
    </head>
    <body>
        <div class="container">
            <div class="main">
                <h2>PHP: Get Values of Multiple Checked Checkboxes</h2>
                <form method="post">
                    <label class="heading">Select Your Technical Exposure:</label>
                    <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label>
                    <input type="checkbox" name="check_list[]" value="Java"><label>Java</label>
                    <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label>
                    <input type="checkbox" name="check_list[]" value="HTML/CSS"><label>HTML/CSS</label>
                    <input type="checkbox" name="check_list[]" value="UNIX/LINUX"><label>UNIX/LINUX</label>
                    <input type="submit" name="submit" Value="Submit"/>
                    
                    <!----- Including PHP Script ----->
                    <?php
                    if (isset($_POST['submit'])) {
                        if (!empty($_POST['check_list'])) {

                            // Counting number of checked checkboxes.
                            $checked_count = count($_POST['check_list']);
                            echo "You have selected following " . $checked_count . " option(s): <br/>";

                            // Loop to store and display values of individual checked checkbox.
                            foreach ($_POST['check_list'] as $selected) {
                                echo "<p>" . $selected . "</p>";
                            }
                            echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
                        } else {
                            echo "<b>Please Select Atleast One Option.</b>";
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
