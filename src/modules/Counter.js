// export default class Counter {
//     constructor() {
//         this.counter = document.querySelectorAll(".counter");
//         this.currentNumber = 0;
//         this.startCounter();
//     }

//     startCounter() {
//         const targetNumber = this.counter[0].getAttribute("data-target");
//         this.counter[0].textContent = "";
//         const counterRun = setInterval(() => {
//             if (this.currentNumber == targetNumber) {
//                 console.log("Stop now");
//                 clearInterval(counterRun);
//             }
//             else {
//                 this.currentNumber++;
//                 this.counter[0].textContent = this.currentNumber;
//             }

//         }, 10);


//     }

// }

import { CountUp } from 'countup.js';
import { Odometer } from 'odometer_countup';

export default class Counter {
    constructor() {

        const counterStaffs = new CountUp('counter__staffs', 2000, {
            plugin: new Odometer({ duration: 0.5, lastDigitDelay: 0 }),
            duration: 1.5,
            enableScrollSpy: true
        });
        if (!counterStaffs.error) {
            counterStaffs.start();
        } else {
            console.error(counterStaffs.error);
        }

        const counterCustomers = new CountUp('counter__customers', 1000, {
            plugin: new Odometer({ duration: 0.5, lastDigitDelay: 0 }),
            duration: 1.5,
            enableScrollSpy: true
        });
        if (!counterCustomers.error) {
            counterCustomers.start();
        } else {
            console.error(counterCustomers.error);
        }

        const counterBranches = new CountUp('counter__branches', 30, {
            plugin: new Odometer({ duration: 0.5, lastDigitDelay: 0 }),
            duration: 1.5,
            enableScrollSpy: true
        });
        if (!counterBranches.error) {
            counterBranches.start();
        } else {
            console.error(counterBranches.error);
        }

        const counterExperiences = new CountUp('counter__experiences', 10, {
            plugin: new Odometer({ duration: 0.5, lastDigitDelay: 0 }),
            duration: 1.5,
            enableScrollSpy: true
        });
        if (!counterExperiences.error) {
            counterExperiences.start();
        } else {
            console.error(counterExperiences.error);
        }

    }
}