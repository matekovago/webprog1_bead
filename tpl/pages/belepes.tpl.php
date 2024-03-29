<div class="form">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <label for="felhasz">Felhasználó név: </label><br><input type="text" name="felhasz">
            <br>
            <label for="jelszo">Jelszó</label><br><input type="password" name="jelszo">
            <br>
            <input type="submit" value="Belépés">
        </fieldset>
    </form>
</div>