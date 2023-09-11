<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  
        <div class="container-fluid align-items-center min-vh-100">
          <div class="row justify-content-center">
            <form name="from" action="./checklogin.php" method="post" class="from" >
              <div class="card">
                <div class="card-body text-center">
                    <h1>LOGIN</h1>

                    <div class="group">
                        <svg stroke="currentColor"  viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" class="icon">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                          </svg>
                        <input class="input" type="text" placeholder="username" name="username" id="username">
                    </div>

                    <div class="group2">
                        <svg stroke="currentColor"  viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" class="icon2">
                            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                        <input class="input2" type="password" placeholder="password" name="password" id="password">
                    </div>

                     
                      <button class="button" type="submit"> LOGIN
                      </button>

                </div>
              </div>
            </form>
          </div>
        </div>

    <style>
  
    .container-fluid{
      align-items: center;
      justify-content: center;
    }
    .card{
      align-items: center;
      width: 600px;
      border-radius: 10px;
      height: 350px;
      top: 240px;
      left: auto;
    }

    .card-body{
      border-radius: 30px;
      height: auto;
    }

/* input */
        .group {
  display: flex;
  line-height: 30px;
  align-items: center;
  position: relative;
  top: 20px;
}

.input {
  width: 300px;
  height: 45px;
  padding-left: 3rem;
  border: 2px solid transparent;
  border-radius: 10px;
  outline: none;
  background-color: #f8fafc;
  color: #0d0c22;
  transition: .5s ease;
}

.input::placeholder {
  color: #94a3b8;
}

.input:focus, input:hover {
  outline: none;
  border-color: rgba(129, 140, 248);
  background-color: #fff;
  box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
}

.icon {
  position: absolute;
  left: 1rem;
  fill: none;
  width: 1rem;
  height: 1rem;
  color: #7a7a80;
}
/* end of input */



/* input2 */
.group2 {
  display: flex;
  line-height: 30px;
  align-items: center;
  position: relative;
  top: 40px;
}

.input2 {
  width: 300px;
  height: 45px;
  padding-left: 3rem;
  border: 2px solid transparent;
  border-radius: 10px;
  outline: none;
  background-color: #f8fafc;
  color: #0d0c22;
  transition: .5s ease;
}

.input2::placeholder {
  color: #94a3b8;
}

.input2:focus, input:hover {
  outline: none;
  border-color: rgba(129, 140, 248);
  background-color: #fff;
  box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
}

.icon2 {
  position: absolute;
  left: 1rem;
  width: 1.5rem;
  height: 1rem;
  color: #7a7a80;
}
/* end of input2 */

/* button*/
.button {
 --color: #00A97F;
 padding: 0.8em 1.7em;
 background-color: transparent;
 border-radius: .3em;
 position: relative;
 overflow: hidden;
 cursor: pointer;
 transition: .5s;
 font-weight: 400;
 font-size: 17px;
 border: 1px solid;
 font-family: inherit;
 text-transform: uppercase;
 color: var(--color);
 z-index: 1;
 top: 80px;
}

.button::before, .button::after {
 content: '';
 display: block;
 width: 50px;
 height: 50px;
 transform: translate(-50%, -50%);
 position: absolute;
 border-radius: 50%;
 z-index: -1;
 background-color: var(--color);
 transition: 1s ease;
}

.button::before {
 top: -1em;
 left: -1em;
}

.button::after {
 left: calc(100% + 1em);
 top: calc(100% + 1em);
}

.button:hover::before, .button:hover::after {
 height: 410px;
 width: 410px;
}

.button:hover {
 color: rgb(35, 253, 24);
}

.button:active {
 filter: brightness(.8);
}


/*end button*/

    </style>
</body>
</html>