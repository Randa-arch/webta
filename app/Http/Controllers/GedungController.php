<?php
/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;

class GedungController extends Controller
{
    public function showHistory(Request $request)
{
    try {
        $selectedDate = $request->input('selectedDate');

        // Tampilkan nilai $selectedDate untuk debug
      

        // Membuat instance FirestoreClient
        $firestore = new FirestoreClient([
            'projectId' => config('firebase.credentials.project_id'),
            'keyFilePath' => app()->basePath('path/to/your/credentials.json'), // Sesuaikan dengan path file kredensial Firebase Anda
        ]);

        // Mendapatkan referensi ke koleksi 'gedungh'
        $gedunghRef = $firestore->collection('gedungh');

        // Mendapatkan referensi ke dokumen dengan tanggal tertentu
        $dateRef = $gedunghRef->document($selectedDate);

        // Mendapatkan semua sub-koleksi (waktu) di bawah dokumen tanggal
        $timeCollections = $dateRef->collections();

        // Tampilkan nilai $timeCollections untuk debug
        

        $historyData = [];

        // Mengambil data dari setiap sub-koleksi (waktu)
        foreach ($timeCollections as $timeCollection) {
            $documents = $timeCollection->documents();
            foreach ($documents as $document) {
                $data = $document->data();
                $historyData[] = [
                    'timestamp' => $data['Timestamp'],
                    'amonia' => $data['Amonia'],
                    'hidrogenSulfida' => $data['Hidrogen Sulfida'],
                    'toiletCondition' => $data['Toilet'] ? 'Kotor' : 'Bersih',
                ];
            }
        }

        return response()->json($historyData);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

}*/
