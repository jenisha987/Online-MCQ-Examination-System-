<?php
include("connect.php");
include("header.php");

// Fetch ID, branch, sem, and subject from URL parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;
$branch = isset($_GET['branch']) ? $_GET['branch'] : null;
$sem = isset($_GET['sem']) ? $_GET['sem'] : null;
$subject = isset($_GET['subject']) ? $_GET['subject'] : null;

// Fetch the question details from the database based on the provided ID
$sql = "SELECT * FROM question WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['btn'])) {
    $question = $_POST['question'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];

    $sql = "UPDATE question SET question='$question', option_a='$option_a', option_b='$option_b', option_c='$option_c', option_d='$option_d', answer='$answer' WHERE id='$id'";
    if($conn->query($sql) === TRUE) {
        header("Location: viewquestion.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Question</title>
</head>
<body>
    <h1>Update Question</h1>
    <form method="POST" enctype="multipart/form-data">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Generate Paper</h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="question">Enter Question</label>
                                                <textarea rows="5" cols="75" class="form-control" name="question" id="questionInput" placeholder="Question" required autofocus><?php echo $row['question']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="option_a">Option A</label>
                                                <input type="text" name="option_a" class="form-control" id="optionA" placeholder="Option A" value="<?php echo $row['option_a']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="option_b">Option B</label>
                                                <input type="text" name="option_b" class="form-control" id="optionB" placeholder="Option B" value="<?php echo $row['option_b']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="option_c">Option C</label>
                                                <input type="text" name="option_c" class="form-control" id="optionC" placeholder="Option C" value="<?php echo $row['option_c']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="option_d">Option D</label>
                                                <input type="text" name="option_d" class="form-control" id="optionD" placeholder="Option D" value="<?php echo $row['option_d']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="answer">Answer</label><br>
                                                <input type="radio" name="answer" value="option_a" <?php if($row['answer'] == 'option_a') echo 'checked'; ?> required> A
                                                <input type="radio" name="answer" value="option_b" <?php if($row['answer'] == 'option_b') echo 'checked'; ?> required> B
                                                <input type="radio" name="answer" value="option_c" <?php if($row['answer'] == 'option_c') echo 'checked'; ?> required> C
                                                <input type="radio" name="answer" value="option_d" <?php if($row['answer'] == 'option_d') echo 'checked'; ?> required> D
                                            </div>
                                            <button type="submit" name="btn" class="btn btn-default">Update Question</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </form>
                                        <a href="select.php" class="col-md-8 col-md-offset-3">Reset Branch &amp; Semester</a>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </form>
</body>
</html>

<?php
include("footer.php");
?>
