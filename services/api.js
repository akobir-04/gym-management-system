// Centralized Asynchronous API Service (Owned by Student 1)
// Handles GET (list & details), POST, PUT, DELETE using async/await and fetch()

import { API_CONFIG } from "../config/config.js";

/**
 * Generic helper function for sending HTTP requests to our REST API.
 */
export async function apiRequest(endpoint, options = {}) {
  const url = `${API_CONFIG.BASE_URL}${endpoint}`;
  const config = {
    headers: API_CONFIG.DEFAULT_HEADERS,
    ...options
  };

  const response = await fetch(url, config);
  const data = await response.json();

  if (!response.ok) {
    throw new Error(data.error || `API Error (${response.status})`);
  }

  return data;
}

// --- Members API Endpoints (Student 1) ---
export const MembersAPI = {
  getAll: () => apiRequest(API_CONFIG.ENDPOINTS.MEMBERS),
  getById: (id) => apiRequest(`${API_CONFIG.ENDPOINTS.MEMBERS}?id=${encodeURIComponent(id)}`),
  create: (memberData) =>
    apiRequest(API_CONFIG.ENDPOINTS.MEMBERS, {
      method: "POST",
      body: JSON.stringify(memberData)
    }),
  update: (id, memberData) =>
    apiRequest(`${API_CONFIG.ENDPOINTS.MEMBERS}?id=${encodeURIComponent(id)}`, {
      method: "PUT",
      body: JSON.stringify(memberData)
    }),
  remove: (id) =>
    apiRequest(`${API_CONFIG.ENDPOINTS.MEMBERS}?id=${encodeURIComponent(id)}`, {
      method: "DELETE"
    })
};

// --- Classes API Endpoints (Student 2) ---
export const ClassesAPI = {
  /**
   * Fetch all available gym classes.
   */
  getAll: () => apiRequest(API_CONFIG.ENDPOINTS.CLASSES),

  /**
   * Fetch details for a single gym class by ID.
   */
  getById: (id) => {
    const classId = Number(id);
    if (!Number.isInteger(classId) || classId <= 0) {
      return Promise.reject(new Error("Invalid class ID"));
    }
    return apiRequest(`${API_CONFIG.ENDPOINTS.CLASSES}?id=${encodeURIComponent(classId)}`);
  }
};