<?php

// Да се напише програма, която чете име на продукт, въведено от потребителя,
// и проверява дали е плод или зеленчук.
// • Плодовете "fruit" са banana, apple, kiwi, cherry, lemon и grapes
// • Зеленчуците "vegetable" са tomato, cucumber, pepper и carrot
// • Всички останали са "unknown"
// Да се изведе “fruit”, “vegetable” или “unknown” според въведения продукт. 

$productName = readline();

switch ($productName) {
    case "apple":
    case "banana":
    case "kiwi":
    case "lemon":
    case "cherry":
    case "grapes":
        echo "fruit";
        break;
    case "tomato":
    case "cucumber":
    case "pepper":
    case "carrot":
        echo "vegetable";
        break;
    default:
        echo "unknown";
        break;
}
