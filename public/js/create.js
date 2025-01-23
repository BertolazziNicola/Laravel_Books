function checkNumberInput(input, min, max) {

    
    // If input invalid, set null
    if (isNaN(input.value) || input.value === "") {
        input.value = null;
    } else if (input.value < min) {
        // If input < min, set min
        input.value = min;
    } else if (input.value > max) {
        // If input > max, set max
        input.value = max;
    }
}
