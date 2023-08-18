<div class="container-lg">

    <div class="horizontal-scroll-container">
        <div class="scroll-content">
            <div class="scroll-item">Item 1</div>
            <div class="scroll-item">Item 2</div>
            <div class="scroll-item">Item 3</div>
            <div class="scroll-item">Item 4</div>
            <div class="scroll-item">Item 5</div>
            <div class="scroll-item">Item 6</div>
            <div class="scroll-item">Item 7</div>
            <div class="scroll-item">Item 8</div>
            <div class="scroll-item">Item 9</div>
            <div class="scroll-item">Item 11</div>
            <div class="scroll-item">Item 12</div>
            <div class="scroll-item">Item 13</div>
            <div class="scroll-item">Item 14</div>
            <div class="scroll-item">Item 15</div>
            <div class="scroll-item">Item 16</div>

            <!-- Add more items as needed -->
        </div>
        <button class="scroll-button left-button">Left</button>
        <button class="scroll-button right-button">Right</button>
    </div>
</div>

<style>
    .horizontal-scroll-container {
        width: 100%;
        overflow: scroll;
        position: relative;
    }

    .scroll-content {
        display: flex;
        flex-wrap: nowrap;
        transition: transform 0.3s ease-in-out;
    }

    .scroll-item {
        flex: 0 0 auto;
        width: 300px;
        /* Adjust the width as needed */
        height: 200px;
        /* Adjust the height as needed */
        background-color: #f0f0f0;
        margin-right: 10px;
    }

    .scroll-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 5px 10px;
        cursor: pointer;
    }

    .left-button {
        left: 0;
    }

    .right-button {
        right: 0;
    }
</style>
<!-- 
<script>
    const scrollContent = document.querySelector('.scroll-content');
    const leftButton = document.querySelector('.left-button');
    const rightButton = document.querySelector('.right-button');

    let scrollPosition = 0;

    leftButton.addEventListener('click', () => {
        scrollPosition -= 100;
        if (scrollPosition < 0) {
            scrollPosition = 0;
        }
        updateScrollPosition();
    });

    rightButton.addEventListener('click', () => {
        const maxScroll = scrollContent.scrollWidth - scrollContent.clientWidth;
        scrollPosition += 100;
        if (scrollPosition > maxScroll) {
            scrollPosition = maxScroll;
        }
        updateScrollPosition();
    });

    function updateScrollPosition() {
        scrollContent.style.transform = `translateX(-${scrollPosition}px)`;

    }
</script> -->

<script>
    $(document).ready(function() {

    });
</script>