<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <style>
        .rounded-image {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            /* margin-bottom: 50px; */
        }
        .container {
            /* margin-top: 50px; */
            align-items: center;
            justify-content: center;
            display: grid;
        }
        /* .btn {
            margin-bottom: 25px;
        } */
    </style>
</head>
<body>
    <div class="container">
        <img src="https://media.tenor.com/SSY2V0RrU3IAAAAM/rick-roll-rick-rolled.gif" alt="" class="rounded-image">
        
        <button type="button" class="btn btn-secondary"><?=$nama?></button>
        <button type="button" class="btn btn-secondary"><?=$npm?></button>
        <button type="button" class="btn btn-secondary"><?=$kelas?></button>
    </div>
</body>
</html>