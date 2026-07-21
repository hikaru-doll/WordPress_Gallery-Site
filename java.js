document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;
  const ham = document.querySelector(".ham");
  const menu = document.querySelector(".main-navigation");

  // ハンバーガーメニューの開閉とaria属性の切り替え
  ham.addEventListener("click", () => {
    body.classList.toggle("open");
    const expanded = ham.getAttribute("aria-expanded") === "true";
    ham.setAttribute("aria-expanded", !expanded);
  });

  menu.addEventListener("click", () => {
    body.classList.remove("open");
    const expanded = ham.getAttribute("aria-expanded") === "true";
    ham.setAttribute("aria-expanded", !expanded);
  });

  // esqキーでメニューを閉じらられるようにして、aria属性も切り替える
  const handleKeydown = (e) => {
    if (e.key === "Escape") {
      document.body.classList.remove("open");
      const expanded = ham.getAttribute("aria-expanded") === "true";
      ham.setAttribute("aria-expanded", !expanded);
    }
  };
  document.addEventListener("keydown", handleKeydown);

  // コピーライトの西暦を動的に出力する
  const yearEl = document.getElementById("year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
});
