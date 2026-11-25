export class Modal {
  constructor(modalId = "classModal") {
    this.modal = document.getElementById(modalId);
    this.titleEl = this.modal?.querySelector("[data-modal-title]") || null;
    this.bodyEl = this.modal?.querySelector("[data-modal-body]") || null;
    this.closeBtn = this.modal?.querySelector("[data-modal-close]") || null;

    this._bindEvents();
  }

  _bindEvents() {
    if (!this.modal) return;

    this.closeBtn?.addEventListener("click", () => this.close());

    this.modal.addEventListener("click", (e) => {
      if (e.target === this.modal) {
        this.close();
      }
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && !this.modal.hidden) {
        this.close();
      }
    });
  }

  open({ title = "", contentHtml = "" } = {}) {
    if (!this.modal) return;
    if (this.titleEl) this.titleEl.textContent = title;
    if (this.bodyEl) this.bodyEl.innerHTML = contentHtml;
    this.modal.hidden = false;
    this.modal.classList.add("is-open");
  }

  close() {
    if (!this.modal) return;
    this.modal.hidden = true;
    this.modal.classList.remove("is-open");
  }
}