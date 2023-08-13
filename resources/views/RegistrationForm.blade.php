<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Registration Form</title>
  <link rel="stylesheet" href="/css/formstyle.css" />
</head>

<body>
  <section class="container">
    <header>Registration Form</header>
    <form action="#" class="form">
      <div class="input-box">
        <label>Fullname</label>
        <input type="text" placeholder="Enter your name here. . ." required />
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="email" placeholder="Enter your email here. . ." required />
      </div>

      <div class="input-box">
        <label>Organization</label>
        <input type="text" placeholder="Enter your organization here. . ." required />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Number Phone</label>
          <input type="number" placeholder="Enter your number phone here. . ." required />
        </div>

        <div class="input-box">
          <label>Birthday</label>
          <input type="date" placeholder="dd-mm-yyyy" required />
        </div>
      </div>

      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" />
            <label for="check-other">Prefer not to say</label>
          </div>
        </div>
      </div>

      <div class="input-box">
        <label>City Region</label>
        <input type="text" placeholder="Enter your hometown here. . ." required />
      </div>

      <div class="input-box">
        <label>Complete Address</label>
        <input type="text" placeholder="Enter your address here. . ." required />
      </div>

      <button>Submit</button>
    </form>
  </section>
</body>

</html>
