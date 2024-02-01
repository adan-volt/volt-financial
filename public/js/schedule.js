// Add event listeners
const checkboxes = document.querySelectorAll('.form-check-input');
const unavailableTexts = document.querySelectorAll('.unavailable');
const inputRows = document.querySelectorAll('.input-row');
const deleteIcons = document.querySelectorAll('.delete-icon');
const addIcons = document.querySelectorAll('.add-icon');
const bodyTableClanedar = document.querySelector('.body-table-calendar');
const dayCalendar = document.querySelectorAll('.day-calendar');

checkboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            unavailableTexts[index].classList.add('d-none');
            inputRows[index].classList.remove('d-none');
            inputRows[index].classList.add('d-flex');
        } else {
            unavailableTexts[index].classList.remove('d-none');
            inputRows[index].classList.remove('d-flex');
            inputRows[index].classList.add('d-none');
        }
    });

    // addIcons[index].addEventListener('click', () => {
    //     if (checkbox.checked) {
    //         const newRow = document.createElement('tr');
    //         newRow.classList.add('border-none');
    //         newRow.innerHTML = `
    //             <th scope="row" class="pl-table d-flex align-items-center">
    //                 <label class="form-check-label" for="exampleCheck1">
    //                     <input type="checkbox" class="form-check-input" style="visibility: hidden" id="exampleCheck1">
    //                     <span class="day-calendar">`+ dayCalendar[index].innerHTML +`</span>
    //                 </label>
    //                 <small class="ml-2 text-white-05 unavailable d-none">Unavailable</small>
    //                 <div class="input-row w-50 align-items-center d-flex" style="justify-content: space-evenly">
    //                     <input type="text" class="form-control input-time col-4 text-white m-0 text-center" placeholder="" value="--:--">
    //                     <input type="text" class="form-control input-time col-4 text-white m-0 text-center" placeholder="" value="--:--">
    //                 </div>
    //             </th>
    //             <td class="delete-cell"><img src="http://localhost:8000/images/delete.png" class="delete-icon" alt=""></td>
    //             <td class="add-cell text-right pr-0" style="visibility: hidden"><img src="http://localhost:8000/images/add.png" class="add-icon" alt=""></td>
    //         `;
    //         newRow.querySelector('.form-check-input').addEventListener('change', () => {
    //             // Similar logic as above
    //         });
    //         newRow.querySelector('.delete-icon').addEventListener('click', () => {
    //             // Similar logic as above
    //             const parentRow = newRow.closest('.border-none');

    //             // Comprueba si se encontró el ancestro y elimínalo si es así
    //             if (parentRow) {
    //                 parentRow.remove();
    //             }
    //         });
    //         newRow.querySelector('.add-icon').addEventListener('click', () => {
    //             // Similar logic as above
    //         });

    //         addIcons[index].parentElement.parentElement.insertAdjacentElement('afterend', newRow);
    //         // bodyTableClanedar.appendChild(newRow);

    //         // checkbox.parentElement.parentElement.parentElement.insertBefore(newRow, checkbox.parentElement.parentElement.nextElementSibling);
    //     }
    // });
});

// FUNCTION horarios(){
//     json: {
//         { "09:00", "10:30" },
//         { "11:00", "12:30" }
//     }
// }