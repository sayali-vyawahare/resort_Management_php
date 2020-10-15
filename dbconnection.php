<?php
session_start();

$dbconnect = mysqli_connect('localhost', 'root', '', 'hotel_management');
if ($dbconnect) {
?>
<script>
console.log("DB Connected");
</script>
<?php
} else {
?>
<script>
console.log("DB not Connected");
</script>
<?php
}
?>