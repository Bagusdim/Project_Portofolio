using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class NgetokneVirus : MonoBehaviour
{
    public GameObject Virus;//arep ngetok ne opo
    public float waktuMinimale, waktuMaximale;
    public float pangonMinimal, pangonMaximal;
    // Start is called before the first frame update
    void Start()
    {
        StartCoroutine(ViruseMetu());//ben functione kepanggil, nek ra dipanggil ra jalan
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    IEnumerator ViruseMetu()
    {
        Instantiate(Virus, transform.position + Vector3.right * Random.Range(pangonMinimal, pangonMaximal)
            , Quaternion.identity);//Netokne obat nang posisi awale, pangmin= -4, pangmax=4
        yield return new WaitForSeconds(Random.Range(waktuMinimale, waktuMaximale));//digawe random ben acak
        StartCoroutine(ViruseMetu());//nyeluk function ObateMetu dadi ben looping
    }
}
