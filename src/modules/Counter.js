export default class Counter {
    constructor() {
        this.counter = document.querySelectorAll(".counter");
        this.currentNumber = 0;
        this.startCounter();
    }

    startCounter() {
        const targetNumber = this.counter[0].getAttribute("data-target");
        this.counter[0].textContent = "";
        const counterRun = setInterval(() => {
            if (this.currentNumber == targetNumber) {
                console.log("Stop now");
                clearInterval(counterRun);
            }
            else {
                this.currentNumber++;
                this.counter[0].textContent = this.currentNumber;
            }

        }, 10);


    }

}

