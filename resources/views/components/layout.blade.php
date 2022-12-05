<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #f0f0f0;
            }
        .emri {
   display: grid; 
   grid-template-rows: auto;
   grid-template-columns: 1fr 1fr 1fr;
   column-gap: 20px;
   margin: 40px 20px;
   margin-bottom: 5px; 
   height: 100%;
   
   
}  

.center {
  display: flex;
  justify-content: center;
  margin-top: 100px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>carGarage</title>
</head>

<body>
    {{$slot}}
</body>
</html>

