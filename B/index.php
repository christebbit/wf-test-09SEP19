<html>
    <body>
        <pre>
            <?php
            include('ListNode.php');
            include('LinkedList.php');

            $ll = new LinkedList();

            $ll->add('Adama')
                    ->add('Roslin')
                    ->add('Baltar')
                    ->add('Valerii')
                    ->add('Thrace')
                    ->add('Tigh');

            echo PHP_EOL;

            echo "List Forwards:  ";
            $ll->readList();

            echo "List Backwards:  ";
            $ll->readListBackwards();


            $ll->deleteNode('Valerii');
            echo "Item deleted" . PHP_EOL;
            echo "List Forwards:  ";
            $ll->readList();

            echo "List Backwards:  ";
            $ll->readListBackwards();
            ?>
        </pre>
    </body>
</html>