<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist php</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>
    <main id="app">
    <h1>Todolist</h1>

    <section class="todo">
        <ul>
            <li v-for="(todo, index) in todoList">
                <p> {{ todo.name }}</p>
            </li>
        </ul>
    </section>
    <section class="input">
        <form action="./server.php" method="POST">
        <input type="text" name="add" id="add" placeholder="Aggiungi una nuova task">
        </form>
    </section>







    </main>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>