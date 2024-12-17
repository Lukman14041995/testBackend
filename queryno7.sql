SELECT 
    mc.CategoryID,
    mc.CategoryName,
    mi.ItemID,
    mi.ItemName,
    COALESCE(SUM(sid.Qty), 0) AS TotalQty,
    COALESCE(SUM(sid.SubTotal), 0) AS SubTotal
FROM mastercategory AS mc
JOIN masteritem AS mi 
    ON mc.PerusahaanNo = mi.PerusahaanNo 
   AND mc.DeviceID = mi.DeviceID 
   AND mc.CategoryDeviceNo = mi.DeviceNo
   AND mc.CategoryID = mi.CategoryID
LEFT JOIN saleitemdetail AS sid 
    ON mi.PerusahaanNo = sid.PerusahaanNo
   AND mi.DeviceID = sid.DeviceID
   AND mi.DeviceNo = sid.ItemDeviceNo
   AND mi.ItemID = sid.ItemID
LEFT JOIN sale AS s 
    ON sid.PerusahaanNo = s.PerusahaanNo
   AND sid.DeviceID = s.DeviceID
   AND sid.TransactionDeviceNo = s.DeviceNo
   AND sid.TransactionID = s.TransactionID
WHERE mc.PerusahaanNo = 639
  AND mc.DeviceID = 1356
  AND (s.SaleDate = '2017-05-11' OR s.SaleDate IS NULL)
GROUP BY mc.CategoryID, mc.CategoryName, mi.ItemID, mi.ItemName
ORDER BY mc.CategoryID, mi.ItemID;
