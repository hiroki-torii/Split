console.log("aaaaa");

const btn = document.getElementById("cal");

btn.addEventListener("click", ()=>{
    const input = document.getElementsByTagName("input");
    const sum_cost = input[2];
    const num_grade3 = input[3];
    const ratio_grade3 = input[4];
    const cost_grade3 = input[5];
    const num_grade2 = input[6];
    const ratio_grade2 = input[7];
    const cost_grade2 = input[8];
    const num_grade1 = input[9];
    const ratio_grade1 = input[10];
    const cost_grade1 = input[11];
    const sum_people = input[12];
    const collect_money = input[13];
    const change = input[14];
    const average = input[15];
    
    if (ratio_grade3.value == ''){
        ratio_grade3.value = 0;
        num_grade3.value = 0;
    }
    if (ratio_grade2.value == ''){
        ratio_grade2.value = 0;
        num_grade2.value = 0;
    }
    if (ratio_grade1.value == ''){
        ratio_grade1.value = 0;
        num_grade1.value = 0;
    }
    cost_grade3.value = Math.ceil(sum_cost.value * ratio_grade3.value / (ratio_grade3.value * num_grade3.value + ratio_grade2.value * num_grade2.value + ratio_grade1.value * num_grade1.value));
    cost_grade2.value = Math.ceil(sum_cost.value * ratio_grade2.value / (ratio_grade3.value * num_grade3.value + ratio_grade2.value * num_grade2.value + ratio_grade1.value * num_grade1.value));
    cost_grade1.value = Math.ceil(sum_cost.value * ratio_grade1.value / (ratio_grade3.value * num_grade3.value + ratio_grade2.value * num_grade2.value + ratio_grade1.value * num_grade1.value));
    
    sum_people.value = Number(num_grade3.value) + Number(num_grade2.value) + Number(num_grade1.value);
    collect_money.value = num_grade3.value * cost_grade3.value + num_grade2.value * cost_grade2.value + num_grade1.value * cost_grade1.value;
    change.value = collect_money.value - sum_cost.value;
    average.value = Math.floor(collect_money.value / sum_people.value * 100) /100; 
    
    window.alert('計算しました。')
})