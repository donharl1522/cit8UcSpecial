$query= "SELECT MAX( prodRate ) AS 'topCrop' FROM `historicaldataset` WHERE cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'";
                        $res1=mysqli_query($link, $query);
                        $topCropData = mysqli_fetch_array( $res1);
                        echo "The".$topCropData['topCrop'];

                        