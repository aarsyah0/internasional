/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.util.Scanner;

public class MatrixOperations2 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int numRowsA, numColsA, numRowsB, numColsB;

        System.out.print("Masukkan jumlah baris matriks A: ");
        numRowsA = scanner.nextInt();
        System.out.print("Masukkan jumlah kolom matriks A: ");
        numColsA = scanner.nextInt();

        System.out.print("Masukkan jumlah baris matriks B: ");
        numRowsB = scanner.nextInt();
        System.out.print("Masukkan jumlah kolom matriks B: ");
        numColsB = scanner.nextInt();

        if (numRowsA != numRowsB || numColsA != numColsB) {
            System.out.println("Matriks A dan B harus memiliki ukuran yang sama untuk operasi penjumlahan dan pengurangan.");
            return;
        }

        int[][] matrixA = new int[numRowsA][numColsA];
        int[][] matrixB = new int[numRowsB][numColsB];

        System.out.println("Masukkan elemen-elemen matriks A:");
        inputMatrixElements(scanner, matrixA);

        System.out.println("Masukkan elemen-elemen matriks B:");
        inputMatrixElements(scanner, matrixB);

        System.out.print("Masukkan jumlah baris untuk mencari nilai maksimum: ");
        int numRowsToFindMax = scanner.nextInt();

        if (numRowsToFindMax < 0 || numRowsToFindMax > numRowsA) {
            System.out.println("Jumlah baris untuk mencari nilai maksimum tidak valid.");
            return;
        }

        while (true) {
            System.out.println("\nPilihan operasi:");
            System.out.println("1. Penjumlahan matriks A dan B");
            System.out.println("2. Pengurangan matriks A dan B");
            System.out.println("3. Nilai maksimum dalam " + numRowsToFindMax + " baris pertama matriks A");
            System.out.println("4. Keluar");
            System.out.print("Masukkan pilihan (1/2/3/4): ");
            int choice = scanner.nextInt();

            switch (choice) {
                case 1:
                    displayMatrix(addMatrices(matrixA, matrixB));
                    break;
                case 2:
                    displayMatrix(subtractMatrices(matrixA, matrixB));
                    break;
                case 3:
                    findMaxInFirstRows(matrixA, numRowsToFindMax);
                    break;
                case 4:
                    System.out.println("Terima kasih! Keluar dari program.");
                    scanner.close();
                    return;
                default:
                    System.out.println("Pilihan tidak valid. Silakan coba lagi.");
            }
        }
    }

    public static void inputMatrixElements(Scanner scanner, int[][] matrix) {
        for (int i = 0; i < matrix.length; i++) {
            for (int j = 0; j < matrix[0].length; j++) {
                System.out.print("Masukkan elemen matriks [" + i + "][" + j + "]: ");
                matrix[i][j] = scanner.nextInt();
            }
        }
    }

    public static int[][] addMatrices(int[][] A, int[][] B) {
        int numRows = A.length;
        int numCols = A[0].length;
        int[][] result = new int[numRows][numCols];

        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                result[i][j] = A[i][j] + B[i][j];
            }
        }

        return result;
    }

    public static int[][] subtractMatrices(int[][] A, int[][] B) {
        int numRows = A.length;
        int numCols = A[0].length;
        int[][] result = new int[numRows][numCols];

        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                result[i][j] = A[i][j] - B[i][j];
            }
        }

        return result;
    }

    public static void findMaxInFirstRows(int[][] matrix, int numRowsToFindMax) {
        System.out.println("Nilai maksimum dalam " + numRowsToFindMax + " baris pertama matriks A:");

        for (int i = 0; i < numRowsToFindMax; i++) {
            int max = matrix[i][0];
            for (int j = 1; j < matrix[0].length; j++) {
                if (matrix[i][j] > max) {
                    max = matrix[i][j];
                }
            }
            System.out.println("Baris " + i + ": " + max);
        }
    }

    public static void displayMatrix(int[][] matrix) {
        System.out.println("Hasil:");

        for (int i = 0; i < matrix.length; i++) {
            for (int j = 0; j < matrix[0].length; j++) {
                System.out.print(matrix[i][j] + " ");
            }
            System.out.println();
        }
    }
}
