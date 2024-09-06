document.addEventListener("DOMContentLoaded", function() {
    const sliderContainer = document.querySelector('#slider .container');
    const items = sliderContainer.children;
    let currentIndex = 0;

    setInterval(() => {
        // Скрываем текущий слайд
        items[currentIndex].style.display = 'none';
        // Переходим к следующему слайду
        currentIndex = (currentIndex + 1) % items.length;
        // Отображаем новый слайд
        items[currentIndex].style.display = 'block';
    }, 3000); // Интервал в 3 секунды
});
