document.addEventListener("DOMContentLoaded", () => {
  // ハンバーガーメニュー
  const ham = document.querySelector(".ham");
  const body = document.body;
  const navMenu = document.querySelector(".nav-menu");

  // フォーカス対象となるナビ内リンク（<li><a>のa要素）を取得
  const navLinks = Array.from(navMenu.querySelectorAll("li > a"));

  let isOpen = false;

  function openMenu() {
    isOpen = true;
    body.classList.add("open");
    ham.setAttribute("aria-expanded", "true");
    ham.setAttribute("aria-label", "メニューを閉じる");

    // 開いたら先頭のliのリンクへフォーカス
    if (navLinks.length > 0) {
      navLinks[0].focus();
    }
    document.addEventListener("keydown", handleKeydown);
  }
  function closeMenu() {
    isOpen = false;
    body.classList.remove("open");
    ham.setAttribute("aria-expanded", "false");
    ham.setAttribute("aria-label", "メニューを開く");

    document.removeEventListener("keydown", handleKeydown);

    ham.focus();
  }

  function toggleMenu() {
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  }
  function handleKeydown(e) {
    if (!isOpen) return;
    // ESCキーで閉じる
    if (e.key === "Escape" || e.key === "Esc") {
      closeMenu();
      return;
    }

    if (e.key !== "Tab") return;

    const active = document.activeElement;
    const lastLink = navLinks[navLinks.length - 1];
    const firstLink = navLinks[0];

    if (e.shiftKey) {
      // Shift+Tab: .hamにいる時は最後のliへループ
      if (active === ham) {
        e.preventDefault();
        lastLink.focus();
      }
      // 先頭リンクからShift+Tabで.hamへ戻るのは自然な挙動なのでそのまま
      return;
    }

    // Tab: .hamにいる時は先頭のliへ
    if (active === ham) {
      e.preventDefault();
      firstLink.focus();
      return;
    }

    // Tab: 最後のliにいる時は.hamへループして戻る
    if (active === lastLink) {
      e.preventDefault();
      ham.focus();
      return;
    }
    // それ以外（li同士の移動）はブラウザ標準のTab移動に任せる
  }

  ham.addEventListener("click", toggleMenu);

  // コピーライトの西暦を動的に出力する
  const year = document.getElementById("year");
  if (year) {
    year.textContent = new Date().getFullYear();
  }
});
