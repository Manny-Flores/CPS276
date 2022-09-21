
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Form Examples</title>
</head>
<body>
    <form method="post" action="">
        <label>Username <input type="text" name="username" size=7 maxlength=7 placeholder="Username"/> </label>
        
        <label>Password <input type="password" name="password" size=7 placeholder="Password"/> </label>

        <p> <label>5 Paragraph double-spaced essay </label> </p>
        
        <textarea id="essay" cols=30 rows=10 placeholder="Go on, write"> </textarea>

        <p>Color:</p>
        <label><input type="radio" name="radiocolor" value="blue" > Blue</label>
        <label><input type="radio" name="radiocolor" value="red" checked > Red</label>
        <label><input type="radio" name="radiocolor" value="yellow" > Yellow</label>

        <p>Sizes:</p>
        <label><input type="checkbox" name="size" value="small" > Small</label>
        <label><input type="checkbox" name="size" value="medium" checked > Medium</label>
        <label><input type="checkbox" name="size" value="large" checked > Large</label>

        <label for="color">Color:</label><br />

        <p></p>

        <select id="color" name="dropdowncolor">
            <option value="blue">Blue</option>
            <option value="red" selected >Red</option>
            <option value="yellow">Yellow</option>
            <option value="purple">Purple</option>
            <option value="green">Green</option>
            <option value="pink">Pink</option>
        </select>

        <input type="file" name="somefile" size="30" >

        <input type="reset" name="reset" label="click" />
        <input type="submit" name="submit" label="click" />
        <input type="button" name="button" label="click" value="Click Me!"/>

    </form>
</body>
</html>