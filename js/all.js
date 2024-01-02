function downloadTablePDF() {
  const element = document.getElementById('myTable'); // Select your table by ID
  const options = {
    margin: 10,
    filename: 'table_document.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2 },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
  };

  // Use html2pdf library to generate and download the PDF
 
  html2pdf().from(element).set(options).save();
}




//   --------------Download in excel form--------------
function downloadExcel() {
    const table = document.getElementById('myTable');
    const rows = Array.from(table.querySelectorAll('tr'));

    const data = rows.map(row => {
      const rowData = [];
      const cells = row.querySelectorAll('th, td');
      cells.forEach(cell => rowData.push(cell.innerText));
      return rowData;
    });

    const worksheet = XLSX.utils.aoa_to_sheet(data);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
    XLSX.writeFile(workbook, 'table_data.xlsx');
  }