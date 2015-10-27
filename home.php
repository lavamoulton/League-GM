<!DOCTYPE html>
<html>
    <head>
        <script src="dexie.js"></script>
        <script>
            //define database
            var db = new Dexie("friends-database");
            db.version(1).stores({
                friends: 'name,shoeSize'
            })
            
            //open database
            db.open();
            
            //put dat data dere
            db.friends.put({name: "Nicholas", shoeSize: 8}).then (function(){
                return db.friends.get('Nicholas');
            }).then (function (friend) {
                alert ("Nicholas has shoe size " + friend.shoeSize);
            }).catch(function(error) {
                alert ("Ooops: " + error);
            });
        </script>
        <title>League GM</title>
    </head>
    <body>
        <?php include("header.php");?>
        <?php include("nav.php");?>
    </body>
</html>