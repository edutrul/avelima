$(function () {
          // First labyrinth: one in-out pair. 
 
    	$("#labyrinth1").labyrinth({
		cellSize: 50, 
		rows: 10, 
		columns: 12, 
		borderWidth: 5,
		borderLineCap: "square", //square is default
		borderColor: "#406060",
		drawWidth: 2,
		drawColor: "#000000",
		
		// Cells are numbered from left to right
		//  and from top to bottom, row-wise. First is 0
		inOutPairs: [[48,83]], 
		
		// Padding (outside labyrinth): top, right, bottom, left.
		// Padding area is drawable too.
		padding: [2, 100, 2, 140],
		
		onComplete: function(n) {
			alert("Congratulations! The mouse got the cheese!");
			this.reset();
		}
    	});
    	
    
        // Second labyrinth: two in-out pairs
    
    	$("#labyrinth2").labyrinth({
		cellSize: 50, 
		rows: 10, 
		columns: 12, 
		borderWidth: 5,
		borderLineCap: "round", //only "round" or "square"
		borderColor: "#aa6060",
		drawWidth: 2,
		drawColor: "#000000",
		backgroundColor: "#eee",
		
		// Two enter-exit pairs:
		inOutPairs: [[12,107], [96,23]],
		
		padding: [2, 100, 2, 140],
		
		onComplete: function(n, isLast) {
			this.options.drawColor="#ff0000";
			var message1="";
			var message2="";
			switch (n) {
				case 0:
					message1= "Congratulations! The mouse got the cheese!\n";
					message2= "Now go help the bear get the honey!!";
				break;
				case 1:
					message1= "Congratulations! The bear got the honey!\n";
					message2= "Now go help the mouse get the cheese!!";
				break;
			}
			var message=message1;
			if (!isLast) message+=message2;
			alert(message);
			if (isLast) {
				this.options.drawColor="#000000";
				this.reset();
			}
		}
    	});
    	
    });
