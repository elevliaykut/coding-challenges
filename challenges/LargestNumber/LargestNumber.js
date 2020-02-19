function SecondLargest(nums) {
    let largest = nums[0];
    let secondLargest = nums[0];

    for (let i = 1; i < nums.length; i++) {
        if (nums[i] > largest) {
            secondLargest = largest;
            largest = nums[i];
        }

        if (nums[i] > secondLargest && nums[i] < largest) {
            secondLargest = nums[i];
        }
    }

    return secondLargest;
}

SecondLargest([3, 5, 5, 2, 1, 7]);