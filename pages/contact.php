<section>
    <h1>Contact</h1>
    <form action="../public/save.php" method="POST">
        <div>
            <label for="name">Votre nom:
                 <input type="text" name="name" id="name" required maxlength="25">
            </label>
        </div>
        <div>
            <label for="message">Votre message:
                <textarea id="message" name="message" required maxlength="500"></textarea>
            </label>
        </div>
        <div>
            <input type="submit" id="submit">
        </div>
    </form>
</section>