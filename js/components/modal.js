// Reusable Details Modal Component (Owned by Student 2)
export function openDetailsModal(contentHtml) {
  const modal = document.getElementById("details-modal");
  const modalBody = document.getElementById("modal-body");
  if (!modal || !modalBody) return;

  modalBody.innerHTML = contentHtml;
  modal.classList.remove("hidden");
}

export function closeDetailsModal() {
  const modal = document.getElementById("details-modal");
  if (modal) modal.classList.add("hidden");
}
