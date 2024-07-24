<?php include ('../layouts/header.php'); ?>
<style>
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid green;
        border-radius: 4px;
        border: 2px solid black;
        border-radius: 12px;
        padding: 5px;
    }
</style>
<div class="container">
    <h1 class="text-center py-5">WELCOME</h1>
    <div class="row p-2" style="background-color:lightblue">
        <div class="col">
            <form>
                <label for="email">EMAIL-ID:</label>
                <input type="text" id="email" name="email">
                <label for="password">PASSWORD:</label>
                <input type="text" id="password" name="password">
                <a type="button" class="btn btn-primary btn-lg mx-2" href="#">log in</a>
            </form>
            <hr>
            <p>Don't have an account?</p>
            <a type="button" class="btn btn-success btn-lg mx-2" href="sign-up.php">registration</a>
        </div>
    </div>
</div>
<?php include ('../layouts/footer.php'); ?>