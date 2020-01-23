anychart.onDocumentReady(function() {
    // set the data
    var data = [
        { x: "Completed", value: windowview.completed },
        { x: "Doing", value: windowview.current }
    ];
    console.log(); // bar
    // create the chart
    var chart = anychart.pie();

    // set the chart title
    chart.title("Task Completion");

    // add the data
    chart.data(data);

    // set legend position
    chart.legend().position("right");
    // set items layout
    chart.legend().itemsLayout("vertical");

    // display the chart in the container
    chart.container("chart");
    chart.draw();
});
