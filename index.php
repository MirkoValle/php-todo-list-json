<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist php</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Fontawesome 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main id="app">
    <h1>Todolist</h1>

    <section class="todo">
        <ul>
            <li v-for="(todo, index) in todoList" :class="(todo.completed == true) ? 'completed' : '' ">
                <p @click="todo.completed = !todo.completed"> {{ todo.name }}</p>
                <form class="delete" action="./server.php" method="POST">
                    <button class="delete" name="delete" :value="index" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </li>
        </ul>
    </section>

    <section class="input">
        <form action="./server.php" method="POST">
        <input tabindex="0" type="text" name="add" id="add" placeholder="Aggiungi una nuova task">
        <button class="input" type="submit"><i class="fa-solid fa-plus"></i></button>
        </form>
    </section>

    </main>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>