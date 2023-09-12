export default class inputValidator{
    constructor(responseCode, message) {
        this.responseCode = responseCode;
        this.message = message;
    }
    validate(xVal, yVal, rVal){
        if (![-3, -2, -1, 0, 1, 2, 3, 4, 5].includes(xVal)) {
            this.message = "The X value should be something from this array: [-3, -2, -1, 0, 1, 2, 3, 4, 5]";
            this.responseCode = 0;
        } else if (!(-5 < yVal && yVal < 5)){
            this.message = "The Y value should be in (-5, 5) interval";
            this.responseCode = 0;
        } else if (![1, 1.5, 2, 2.5, 3].includes(rVal)){
            this.message = "The R value should be something from this array: [1, 1.5, 2, 2.5, 3]";
            this.responseCode = 0;
        } else {
           this.responseCode = 1;
        }
    }

    getResponseCode(){
        return this.responseCode;
    }
    getMessage(){
        return this.message;
    }
}