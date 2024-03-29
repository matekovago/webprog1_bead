<div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <fieldset>
        <label for="email">Az ön Email címe: </label> <br><input type="text" name="email"><br>
        <label for="targy">Üzenet tárgya:</label><br><input type="text" name="targy"> <br>
        <label for="uzenet">Üzenet</label><br> <textarea name="uzenet" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Üzenet küldése">
    </fieldset>
    </form>