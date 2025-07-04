const container = document.getElementById("boxes-container");
      for (let i = 1; i <= 10; i++) {
        const box = document.createElement("div");
        box.textContent = i;
        box.style.width = "60px";
        box.style.height = "60px";
        box.style.display = "flex";
        box.style.alignItems = "center";
        box.style.justifyContent = "center";
        box.style.margin = "10px";
        box.style.borderRadius = "10px";
        box.style.boxShadow = "0 2px 8px rgba(0,0,0,0.04)";
        box.style.backgroundColor = i % 2 === 0 ? "orange" : "aqua";
        box.style.color = "white";
        box.style.fontWeight = "bold";
        container.appendChild(box);
      }