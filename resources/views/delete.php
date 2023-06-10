use Illuminate\Support\Facades\DB;

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    DB::table('posts')->where('id', $id)->delete();
}

return redirect('/posting.php');