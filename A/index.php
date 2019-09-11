<html>
    <body>
        
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require('LowestNumberFinder.php');
            
            $finder = new LowestNumberFinder();

            
            echo $finder->getLowest($_POST['numbers']) . " is the lowest positive integer missing from the list " . $_POST['numbers'];
            
            echo "<br /><a href='index.php'>try again</a>";
        } else { 
            
            ?>
        
        
        
        <form method="post" action="#" name="testform">
            Enter numbers in CSV format<input type="text" name="numbers" value="3, 4, -1, 1" />
            <input type="submit" name="submit" value="submit"  />
        </form>
        
        <?php } ?>
    </body>
</html>