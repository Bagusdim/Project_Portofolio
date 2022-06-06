using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class NgetokneObat : MonoBehaviour
{
    public GameObject obat;
    public float waktuMinimale, waktuMaximale;
    public float pangonMinimal, pangonMaximal;
    // Start is called before the first frame update
    void Start()
    {
        StartCoroutine(ObateMetu());//ben functione kepanggil, nek ra dipanggil ra jalan   
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    IEnumerator ObateMetu()
    {
        Instantiate(obat, transform.position + Vector3.right * Random.Range(pangonMinimal, pangonMaximal)
             , Quaternion.identity);//Netokne obat nang posisi awale, pangmin= -4, pangmax=4
        yield return new WaitForSeconds(Random.Range(waktuMinimale, waktuMaximale));//digawe random ben acak
        StartCoroutine(ObateMetu());//nyeluk function ObateMetu dadi ben looping
    }
}
